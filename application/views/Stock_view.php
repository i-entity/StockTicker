<table style="width:100%">

    <tr>
        <th>CODE</th>
        <th>NAME</th> 
        <th>Category</th> 
        <th>Value</th>
    </tr>
    {stock_array}    

    <tr>             
        <td><a href="/stockhistory/stock/{Name}">{Code}</a></td>
        <td><a href="/stockhistory/stock/{Name}">{Name}</a></td>
        <td><a href="/stockhistory/stock/{Name}">{Category}</a></td>
        <td><a href="/stockhistory/stock/{Name}">{Value}</a></td>
    </tr>


    {/stock_array} 

</table>