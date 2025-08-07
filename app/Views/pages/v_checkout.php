<?= $this->extend('layoutcheckout') ?>
<?= $this->section('content') ?>

<div class="container mt-4">
    <h2 class="text-center">Form Checkout</h2>

    <div class="d-flex justify-content-center">
        <div style="width: 100%; max-width: 600px;" class="p-4 border rounded shadow-sm bg-white">
            <form action="<?= base_url('checkout/save') ?>" method="post">
                
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?= session()->get('username'); ?>">
                </div>
                
                <div class="mb-3">
                    <label for="paket">Pilih Paket</label>
                    <select name="paket" id="paket" class="form-control" required>
                        <option value="">-- Pilih Paket --</option>
                        <?php foreach($paket as $p): ?>
                            <option 
                                value="<?= $p['id'] ?>" 
                                data-harga="<?= $p['harga'] ?>"
                            >
                                <?= $p['nama'] ?> (Rp<?= number_format($p['harga']) ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="berat">Berat Barang (Kg)</label>
                    <input type="number" name="berat" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div> 
                
                <div class="mb-3">
                    <label for="kelurahan" class="form-label">Kelurahan</label>
                    <select class="form-control" id="kelurahan" name="kelurahan" required></select>
                </div>
                
                <div class="mb-3">
                    <label for="provinsi">Provinsi Tujuan</label>
                    <select name="provinsi" id="provinsi" class="form-control" required>
                        <option value="">-- Pilih Provinsi --</option>
                        <option value="DKI Jakarta" data-tarif="15000">DKI Jakarta - Rp15.000</option>
                        <option value="Jawa Barat" data-tarif="14000">Jawa Barat - Rp14.000</option>
                        <option value="Banten" data-tarif="13000">Banten - Rp13.000</option>
                        <option value="Jawa Tengah" data-tarif="12000">Jawa Tengah - Rp12.000</option>
                        <option value="DI Yogyakarta" data-tarif="12500">DI Yogyakarta - Rp12.500</option>
                        <option value="Jawa Timur" data-tarif="13500">Jawa Timur - Rp13.500</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="total">Total Bayar</label>
                    <input type="number" name="total" id="total" class="form-control" readonly required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Checkout</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
$(document).ready(function() {
    var ongkir = 0;
    var total = 0; 
    hitungTotal();

    $('#kelurahan').select2({
    placeholder: 'Ketik nama kelurahan...',
    ajax: {
        url: '<?= base_url('get-location') ?>',
        dataType: 'json',
        delay: 1500,
        data: function (params) {
            return {
                search: params.term
            };
        },
        processResults: function (data) {
            return {
                results: data.map(function(item) {
                return {
                    id: item.id,
                    text: item.subdistrict_name + ", " + item.district_name + ", " + item.city_name + ", " + item.province_name + ", " + item.zip_code
                };
                })
            };
        },
        cache: true
    },
    minimumInputLength: 3
});

function hitungTotal() {
    const hargaPaket = $('#paket').find(':selected').data('harga') ?? 0;
    const tarif = $('#provinsi').find(':selected').data('tarif') ?? 0;
    const berat = parseInt($('#berat').val()) || 0;
    const biayaBerat = berat * 3; // tarif berat per gram

    const total = hargaPaket + tarif + biayaBerat;
    $('#total').val(total);
}

$('#paket, #provinsi, #berat').on('change keyup', hitungTotal);
});

</script>
<?= $this->endSection() ?>
