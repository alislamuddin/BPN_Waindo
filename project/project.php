            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" action="index.php?menu=t_project">
                                <button type="submit" class="btn btn-default btn-success">Tambah </button>
                                </form>
                                <br>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-striped" id="barang">
                                        <thead>
                                            <tr style="background-color: #ccc;">
                                                <th>No</th>
                                                <th>Nama Project</th>
                                                <th>Jenis</th>
                                                <th>Tanggal Rencana</th>
                                                <th>Tanggal Progress</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include ("conn.php");
                                                    $query= "SELECT * FROM project";
                                                    $tampil=mysqli_query($koneksi, $query) or die(mysqli_error());

                                                    $no=0;
                                                     while($data=mysqli_fetch_array($tampil))
                                                    { $no++;
                                            ?>
                                            <tr align='left'>
                                                <td><?php echo  $no;?></td>
                                                <td><?php echo  $data['nama_project']; ?></td>
                                                <td><?php echo  $data['jenis_project']; ?></td>
                                                <td><?php echo  $data['tanggal_rencana']; ?></td>
                                                <td><?php echo  $data['tanggal_progress']; ?></td>
                                                <td><?php echo  $data['status']; ?></td>
                                                <td>
                                                   
                                                    <a href="index.php?menu=e_project&hal=edit&no_project=<?php echo $data['no_project'];?>">View Project</a> | 
                                                    <a href="project/hapus.php?hal=hapus&no_project=<?php echo $data['no_project'];?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                            
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>