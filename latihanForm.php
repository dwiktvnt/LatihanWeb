<?php
function buka_form($link, $id, $aksi)
{
    echo '<form method="get" action="' . $link . '" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id" value="' . $id . '">
                <input type="hidden" name="aksi" value="' . $aksi . '">';
}

function buat_textbox($label, $nama, $nilai, $lebar = '', $tipe = "text", $disable = "")
{
    echo '<div class="form-grup" id="' . $nama . '">
                <label for="' . $nama . '" class="col-md-6 control-label">' . $label . '</label>
                <div class="col-sm-' . $lebar . '">
                    <input type="' . $tipe . '" class="form-control" name="' . $nama . '" value="' . $nilai . '" ' . $disable . '>
                </div>
            </div>';
}

function buat_textarea($label, $nama, $nilai, $class = '')
{
    echo '<div class="form-group" id="' . $nama . '">
                <label for="' . $nama . '" class="col-sm-2 control-label">' . $label . '</label>
                <div class="col-sm-10">
                    <textarea class="form-control ' . $class . '" rows="8" name="' . $nama . '">' . $nilai . '</textarea>
                </div>
            </div>';
}

function buat_combobox($label, $nama, $list, $nilai, $lebar = '4')
{
    echo '<div class="form-group" id="' . $nama . '">
                <label for="' . $nama . '" class="col-sm-2 control-label">' . $label . '</label>
                <div class="col-sm-' . $lebar . '">
                    <select class="form-control" name="' . $nama . '">';
    foreach ($list as $ls) {
        $select = $ls['val'] == $nilai ? 'selected' : '';
        echo '<option value = ' . $ls['val'] . ' ' . $select . '>' . $ls['cap'] . '</option>';
    }
    echo '       </select>
                </div>
            </div>';
}

function buat_chechbox($label, $name, $list)
{
    echo '<div class="form-group" id="' . $nama . '">
                <label class="col-sm-2 control-label">' . $label . '</label>
                <div class="col-sm-10">';
    foreach ($list as $ls) {
        echo '<input type ="checkbox" name="' . $nama . '[]" value="' . $ls['val'] . '" ' . $ls['check'] . '> ' . $ls['cap'];
    }
    echo '   </div>
            </div>';
}

function buat_radio($label, $nama, $list)
{
    echo '<div class="form-group" id="' . $nama . '">
                <label class="col-sm-2 control-label">' . $label . '</label>
                <div class="col-sm-10">';
    foreach ($list as $ls) {
        echo ' <label for="' . $nama . $ls['val'] . '" id="label_' . $nama . $ls['val'] . '">
                    <input type ="radio" name="' . $nama . '" id="' . $nama . $ls['val'] . '" value="' . $ls['val'] . '" ' . $ls['check'] . '> ' . $ls['cap'] . '
                </label>';
    }
    echo '   </div>
            </div>';
}

function buat_imagepicker($label, $nama, $nilai, $lebar = '4')
{
?>
    <script>
        $(function() {
            $('#modal-<?php echo $nama; ?>').on('hidden.bs.modal', function(e) {
                var url = $('#<?php echo $nama; ?>').val();
                if (url != "") $('.tampil-<?php echo $nama; ?>').
                html('<img scr="../media/source/' + url + '" width="150" style="margin-bottom: 10px">');
            })
        });
    </script>
<?php
    echo '<div class="form-group imagepicker">
            <label for="' . $nama . '" class=col-sm-2 control-label">' . $label . '</label>
            <div class="col-sm-' . $lebar . '">
            <div class="tampil-' . $nama . '">';
    if ($nilai != "") echo '<img src="../media/source/' . $nilai . '" width="150" style="margin-control: 10px">';
    echo '   </div>
            <div classs="input-group">
                <input type="text" class="form-control input-' . $nama . '" id="' . $nama . '" name="' . $nama . '" value="' . $nilai . '" readonly>
                <a data-toggle="modal" data-target="#modal-' . $nama . '" class="input-group-addon btn btn-primary pilih-' . $nama . '">...</a>
            </div>
            </div>
            <div class="modal fade" id="modal-' . $nama . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden+"true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"
                            aria-label="close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-little" id="myModalLabel">file Manager</h4>
                        </div>
                        <div class="modal-body">
                            <iframe src="../plugin/filemanager/dialog.php?type=1&field_id=' . $nama .
        '&relative_url+1" width="100%" height="400" style="border: 0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
}

function tutup_form($link)
{
    echo '<div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Save 
                    </button>
                        <a class="btn btn-warning" href="' . $link . '">
                        <i class="fa fa-ban"></i> Cancel
                    </a>
                </div>
            </div>
        </form>';
}
?>