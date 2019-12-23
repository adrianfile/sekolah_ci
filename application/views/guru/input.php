<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<style type="text/css">
			p {
				text-align: center;
				font-size: 20px;
			}
</style>
<body >
    <p><b>DAFTAR GURU</b></p>
    <div class="col-md-6 mx-auto d-block" align="center">
                <div data-form-type="formoid">
                    <?php echo form_open('guru/save'); ?>
                        <div class="row">
                            <div class="col-md-6 multi-horizontal" data-for="name">
                                <input type="text" class="form-control input" name="nip" data-form-field="Name" placeholder="NIP" required="" id="name-form4-4v">
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="phone">
                                <input type="text" class="form-control input" name="nama" data-form-field="Phone" placeholder="Nama Guru" required="" id="phone-form4-4v">
                            </div>
                            <div class="col-md-12" data-for="email" style="margin-top:10px;">
                                <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-4v">
                            </div>
                            <br style="margin-top:10px;">
                            <div class="col-md-12" data-for="message">
                                <p>JENIS KELAMIN</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio1" name="jk" value="L">
                                <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="jk" value="P">
                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                </div>
                            </div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-primary btn-form display-4">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
	<?php echo form_close(); ?>
</body>
</html>