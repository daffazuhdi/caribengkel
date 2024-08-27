<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Log;
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
        // real
        // fiveMonth = Carbon::now()->subMonths(5);
        // $sixMonth = Carbon::now()->subMonths(6);

        //dev
        $sixMonth = Carbon::now();

        $car = CarService::select('car_services.id as id','car_services.car_id', 'users.first_name','users.phone_number as phoneNumber', 'car_brands.name as carBrand', 'car_models.name as carModel','car_services.service_date', 'cars.license_plate')

                    ->leftjoin('car_user', 'car_user.car_id', '=', 'car_services.car_id')
                    ->leftjoin('cars', 'cars.id', '=', 'car_services.car_id')
                    ->leftjoin('car_models', 'cars.car_model_id', '=', 'car_models.id')
                    ->leftjoin('car_brands', 'car_models.car_brand_id', '=', 'car_brands.id')
                    ->leftjoin('users', 'users.id', '=', 'car_user.user_id')
                    // ->where('car_services.service_date', '<=', $sixMonth)->groupBy('car_id')->get(['car_id', DB::raw('MAX(service_date) as service_date')])
                    ->where('car_services.is_notified', '=', 0)
                    ->where('car_services.service_date', '<=', $sixMonth)

                    // real scenario
                    // ->where('car_services.service_date, '<=', $fiveMonth)
                    //-> where('car_services.service_date, '>=', $sixMonth)
                    
                    ->get();



        foreach ($car as $c) {

            // require_once '/path/to/vendor/autoload.php';

            //nanti dipake hrsnya gini
            //
            $str = $c->phoneNumber;
            $str = substr($str, 1);
            $str = "+62" .$str. "";
            // echo $str;

            // $nomer = "+6285695930369"; //+6287871120749
            //MG09ae7ab09cd1274faa7aef78bd67706a
            //AC9d06f79964e5e4077a0066b680662907
            $sid    = "AC9d06f79964e5e4077a0066b680662907";
            $token  = "a69f1607ac96168031c3252918064350";
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
            ->create("whatsapp:{$str}", // harusnya yg $str
              array(
                "from" => "whatsapp:+14155238886",
                "body" =>  "Halo, Bapak/Ibu " .$c->first_name. "!\n\nKami dari CariBengkel ingin mengingatkan bahwa kendaraan bapak/ibu, dengan:\n\nTipe Mobil: *" .$c->carBrand. " ".$c->carModel. "*\nPlat Nomor: *" .$c->license_plate. "*\n\nSudah mendekati 6 bulan sejak servis terakhir. Silakan lakukan penjadwalan servis dan perbarui tanggal terakhir servis melalui CariBengkel (http://cari-bengkel.my.id). Terima kasih! 🚙💨"
              )
            );

            // print($message->sid);


            // echo $message = "Halo, Bapak/Ibu " .$c->first_name. "!\n\nKami dari CariBengkel ingin mengingatkan bahwa kendaraan bapak/ibu, dengan:\n\nTipe Mobil: *" .$c->carBrand. " ".$c->carModel. "*\nPlat Nomor: *" .$c->license_plate. "*\n\nSudah mendekati 6 bulan sejak servis terakhir. Silakan lakukan penjadwalan servis dan perbarui tanggal terakhir servis melalui CariBengkel.id (http://CariBengkel.id). Terima kasih! 🚙💨";
            // echo "\n";

            echo $c->id;
            echo "\n";

            //update TABLE car_service kolom is_notified disini

            CarService::where('id', $c->id)->update([
                'is_notified' => 1,
            ]);

        }

	Log::debug("Run Schedule");

        return Command::SUCCESS;
    }
}
