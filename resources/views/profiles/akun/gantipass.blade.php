      <div class="edit-button">
        <p style="cursor: pointer;" id="actionFormChangePassword"><i class="bi bi-pencil me-1"></i>Ubah</p>
      </div>

      <form action="/profile/akun" method="POST">
        @csrf
        <input type="hidden" name="form_type" value="gantipassword">
        <label for="inputPassword5" class="form-label">Password baru</label>
        <div class="col-sm-6">
          <input type="password" readonly placeholder="Password" 
          class="form-control-plaintext password-input" name="new_password" id="new_password"
          required>
        </div>
        @error('new_password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror

        <label for="inputPassword5" class="form-label mt-3">Konfirmasi Password baru</label>
        <div class="col-sm-6">
          <input type="password" name="confirmed_password" readonly placeholder="Password" 
          class="form-control-plaintext password-input" id="confirmed_password" required>
        </div>
        @error('confirmed_password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    
        <div class="col-12 mt-3 d-none" id="btnGantiPass">
          <button type="submit" class="btn btn-danger">Simpan</button>
        </div>

      </form>
      
    