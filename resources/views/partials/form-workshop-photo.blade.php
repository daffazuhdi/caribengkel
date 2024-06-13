<div class="form-group">
    {{-- <label for="picture">Choose Picture:</label> --}}
    <div class="picture-container d-flex flex-column gap-3 align-items-center justify-content-center" style="border: 1.6px dashed #C2C2C2; border-radius: 8px; cursor: pointer; min-height: 300px;"
        onclick="document.getElementById('photo').click()">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" class="placeholder-icon">
            <path fill="none" stroke="#d9d9d9" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M11.678 20.271C7.275 21.318 4 25.277 4 30c0 5.523 4.477 10 10 10c.947 0 1.864-.132 2.733-.378m19.322-19.351c4.403 1.047 7.677 5.006 7.677 9.729c0 5.523-4.477 10-10 10c-.947 0-1.864-.132-2.732-.378M36 20c0-6.627-5.373-12-12-12s-12 5.373-12 12m5.065 7.881L24 20.924L31.132 28M24 38V24.462"/>
        </svg>
        <img id="preview" src="#" alt="Preview" style="display: none; max-width: 100%; max-height: 400px;">
        <span class="placeholder-text" style="color: #303030; font-weight: 500; font-size: 18px;">Unggah atau Jatuhkan Gambar</span>
        <div class="btn btn-primary placeholder-button" style="font-size: 14px;">
            Pilih Gambar
        </div>
    </div>
    <input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png" class="@error('photo') is-invalid @enderror" onchange="previewImage()" style="display: none;">
    @error('photo')
    <div class="invalid-feedback">
        Foto wajib diisi dalam format .jpg, .jpeg, atau .png.
    </div>
    @enderror
</div>

@section('script')
<script>
    function previewImage() {
        const fileInput = document.getElementById('photo');
        const previewImage = document.getElementById('preview');
        const placeholderText = document.querySelector('.placeholder-text');
        const placeholderIcon = document.querySelector('.placeholder-icon');
        const placeholderButton = document.querySelector('.placeholder-button');

        const file = fileInput.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
            placeholderText.style.display = 'none';
            placeholderIcon.style.display = 'none';
            placeholderButton.style.display = 'none';
        }

        reader.readAsDataURL(file);
    }
</script>
@endsection
