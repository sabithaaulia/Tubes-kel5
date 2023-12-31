@extends('app')

@section('title', 'Menu')

@section('content')
<table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->jenis_produk }}</td>
                    <td>Rp. {{ number_format($item->harga_produk, 0, ',', '.') }}</td>
                    <td>{{ $item->jumlah_produk }}</td>
                    <td>
                        <button class="edit-button" onclick='openEditModal(@json($item))'>Edit</button>
                        <button class="delete-button" onclick='deleteProduct({{ $item->id }})'>Hapus</button>
                        <button class="add-to-cart-button" data-product-id="{{ $item->id }}" onclick="addToCart(this)">🛒</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

                <!-- Modal Edit Produk -->
        <div id="editProductModal" class="modal" style="display:none;">
            <div class="modal-content">
                <span class="close" onclick="closeEditModal()">&times;</span>
                <h2>Edit Produk</h2>
                <form method="post">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" id="editProductId" name="id">

                    <div class="form-group">
                        <label for="editProductName">Nama Produk</label>
                        <input type="text" id="editProductName" name="nama_produk" required>
                    </div>

                    <div class="form-group">
                        <label for="editProductType">Jenis</label>
                        <select id="editProductType" name="jenis_produk">
                            <option value="makanan">Makanan</option>
                            <option value="minuman">Minuman</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="editProductPrice">Harga</label>
                        <input type="text" id="editProductPrice" name="harga_produk" required>
                    </div>

                    <div class="form-group">
                        <label for="editProductQuantity">Jumlah</label>
                        <input type="number" id="editProductQuantity" name="jumlah_produk" required>
                    </div>

                    <button type="submit" class="submit-button">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>



    <button class="order-button">Buat Pesanan</button>
    </div>