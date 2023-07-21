<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    
    <head>
    <link rel="shortcut icon" href="<?php echo base_url('style/IMG_3889.PNG'); ?>">
    <title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>

<body>
    <Form Action="<?Php echo site_url('C_User/update_data') ?>" Method="Post">
        <?php
        foreach ($data->result() as $row) {
            $nik = $row->nik;
            $nama = $row->nama;
            $no_hp = $row->no_hp;
            $alamat = $row->alamat;
            $foto = $row->foto;
            $gender = $row->gender;
            $tipe = $row->tipe;
            ?>

            <Table>
                <Tr>
                    <Td>NIK</Td>
                    <Td>:</Td>
                    <Td><Input Type="number" readonly class="form-control-plaintext" Name="nik" value="<?php echo $nik ?>" ></Td>
                </Tr>
                <Tr>
                    <Td>Nama</Td>
                    <Td>:</Td>
                    <Td><Input Type="Text" Name="nama" value="<?php echo $nama ?>"></Td>
                </Tr>
                <Tr>
                    <Td>No Hp</Td>
                    <Td>:</Td>
                    <Td><Input Type="number" Name="no_hp" value="<?php echo $no_hp ?>"></Td>
                </Tr>
                <Tr>
                    <Td>alamat</Td>
                    <Td>:</Td>
                    <Td><Input Type="Text" Name="alamat" value="<?php echo $alamat ?>"></Td>
                </Tr>
                <Tr>
                    <Td>foto</Td>
                    <Td>:</Td>
                    <Td><Input Type="text" Name="foto" value="<?php echo $foto ?>"></Td>
                </Tr>
                <Tr>
                    <Td>gender</Td>
                    <Td>:</Td>
                    <Td><input type="radio" class="form-selected" name="gender" id="gender" value="Laki-Laki" <?= $gender=='Laki-Laki'? 'checked':'';  ?>> Laki-Laki
                    <input type="radio" class="form-selected" name="gender" id="gender" value="Perempuan" <?= $gender=='Perempuan'? 'checked':'';  ?>> Perempuan</Td>
                    
                </Tr>
                <?php if( $type=$this->session->userdata('tipe')=='Admin' ) { ?>
                <Tr>
                    <Td>tipe</Td>
                    <Td>:</Td>
                    <Td><Input Type="Text" Name="tipe" value="<?php echo $nama ?>"></Td>
                </Tr>
                <?php } ?>
                <Tr>
                    <Td Colspan="3"><Button Type="Submit">Tambah Mahasiswa</Button></Td>
                </Tr>
            </Table>
        <?php
        }
        ?>
    </Form>
</body>

</html>