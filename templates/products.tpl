<div id="products">
    <section id="ORDERS">
        <div class="container">
            <table class="table">
            <theader>
                
                <th>order </th><th>Detail</th><th>artikel nummer</th><th>product</th> <th>beschrijving</th> <th>prijs</th> <th>voorraad</th>
                
            </theader>
            <tbody>
                {foreach $products as $row}
                {strip}

                   <td class="proimages">{$row.productID}<img src="./products_pictures/{$row.thumbnail}" alt="{$row.name}" border=0></td>
                    <td>{$row.name}</td>
                   <td>{$row.description}</td>
                    <td class="prijs">&euro;{$row.price}</td>

                    <td>Aantal <strong>{$row.in_stock}</strong></td>

                    <td><a href="kopen.php"{$row.productID}">kopen</a></td>
                     
                   </tr>
                {/strip}
                {/foreach}
            </tbody>
            
        </table>
    </section>

</div>