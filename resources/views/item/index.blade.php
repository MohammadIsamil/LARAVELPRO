<form method="POST" action='{{ route("item.create") }}'>

  @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="qty">Quantity:</label>
        <input type="text" name="qty" id="qty">
    </div>
    <div>
    <label for="vendor_id">Vendor:</label>
    <select name="vendor_id" id="vendor_id">
     
    </select> 
</div>
    <button type="submit">Submit</button>
</form>
<script>
      fetch('{{ route("vendor.allVendors") }}')
        .then(response => response.json())
        .then(data => {
            const vendorDropdown = document.getElementById('vendor_id');
            data.forEach(vendor => {
                console.log(vendor.name)
                const option = document.createElement('option');
                option.value = vendor.id;
                option.textContent = vendor.name;
                vendorDropdown.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching data:', error));

      </script>