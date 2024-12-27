<x-layout>
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tombol Tambah Data Banner</h6>
                        <div class="m-n2">
                            <a href="{{ route('addbanner')}}"><button type="button" class="btn btn-primary m-2">Tambah Data</button></a>
                        </div>
                    </div>
                </div>
                          <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Banner Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">judul</th>
                                            <th scope="col">deskripsi</th>
                                            <th scope="col">gambar</th>
                                            <th scope="col">aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>123</td>
                                            <td>Member</td>
                                        </tr>
                        <a href=""><button type="button" class="btn btn-primary m-2">Edit Data</button></a>
                        <a href=""><button type="button" class="btn btn-primary m-2">Hapus Data</button></
            <!-- Table End -->
</x-layout>
