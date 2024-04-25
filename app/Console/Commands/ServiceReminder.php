<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Models\CarService;
use App\Models\Car;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;

class ServiceReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'service:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Service Reminder to user whose car is near 6 months after its last service.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $sixMonth = Carbon::now()->subMonths(1);

        $car = CarService::select('car_services.car_id', 'users.first_name','users.phone_number', 'car_brands.name as carBrand', 'car_models.name as carModel','car_services.service_date', 'cars.license_plate')

                    ->leftjoin('car_user', 'car_user.car_id', '=', 'car_services.car_id')
                    ->leftjoin('cars', 'cars.id', '=', 'car_services.car_id')
                    ->leftjoin('car_models', 'cars.car_model_id', '=', 'car_models.id')
                    ->leftjoin('car_brands', 'car_models.car_brand_id', '=', 'car_brands.id')
                    ->leftjoin('users', 'users.id', '=', 'car_user.user_id')

                    ->where('car_services.service_date', '<', $sixMonth)->groupBy('car_id')->get(['car_id', DB::raw('MAX(service_date) as service_date')]);


        foreach ($car as $c) {

            // require_once '/path/to/vendor/autoload.php';

            $sid    = "AC9d06f79964e5e4077a0066b680662907";
            $token  = "02599cd96e8673f44ab66a6f5d27c579";
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
            ->create("whatsapp:+6285695930369", // to
              array(
                "from" => "whatsapp:+14155238886",
                "body" => "Halo, Bapak/Ibu " .$c->first_name. "!\n\nKami dari CariBengkel ingin mengingatkan bahwa kendaraan bapak/ibu, dengan:\n\nTipe Mobil: *" .$c->carBrand. " ".$c->carModel. "*\nPlat Nomor: *" .$c->license_plate. "*\n\nSudah mendekati 6 bulan sejak servis terakhir. Silakan lakukan penjadwalan servis dan perbarui tanggal terakhir servis melalui CariBengkel.id (http://CariBengkel.id). Terima kasih! 🚙💨"
              )
            );

            print($message->sid);

            // echo $message = "Halo, Bapak/Ibu " .$c->first_name. "!\n\nKami dari CariBengkel ingin mengingatkan bahwa kendaraan bapak/ibu, dengan:\n\nTipe Mobil: *" .$c->carBrand. " ".$c->carModel. "*\nPlat Nomor: *" .$c->license_plate. "*\n\nSudah mendekati 6 bulan sejak servis terakhir. Silakan lakukan penjadwalan servis dan perbarui tanggal terakhir servis melalui CariBengkel.id (http://CariBengkel.id). Terima kasih! 🚙💨";
            echo "\n";

            //update TABLE car_service kolom is_notified disini
        }
        // echo $query2;
        return Command::SUCCESS;
    }
}
