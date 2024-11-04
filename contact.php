<!-- Contact.php -->
<div class="contact-section">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4 mb-4">Kontak Saya</h1>
            <p class="lead">"Koneksi antar ninja adalah kekuatan sejati!"</p>
            <p>Jika Anda ingin berdiskusi tentang pengembangan web atau proyek keren lainnya, jangan ragu untuk menghubungi saya!</p>
        </div>
        <div class="col-md-6 offset-md-3">
            <form action="send_message.php" method="POST">
                <div class="form-group">
                    <label for="name">Nama Anda</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Anda</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email Anda" required>
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Pesan Anda..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">Kirim Pesan dengan Semangat Ninja</button>
            </form>
        </div>
    </div>
</div>
