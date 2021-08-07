<h1>List Product</h1>

<table>
        <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Usia</th>
        </tr>
        </thead>

    <tbody>
    @foreach($produk as $product)
          <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td> 
                <a href="/products/{{$product->id}}/edit">Edit</a>
                <form action="/products/{{$product->id}}" method="POST">
                 @method('DELETE')
                 @csrf
                <input type="submit" value="Delete">
                </form>
            </td>
         </tr>
    @endforeach
    
    </tbody>
<a href="/products/create">Create</a>
</table>