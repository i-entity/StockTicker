<table style="width:100%">

    <tr>
        <th>CODE</th>
        <th>NAME</th> 
        <th>Category</th> 
        <th>Value</th>
    </tr>
    {stock_array}    

    <tr>             
        <td><a href="/stockhistory/stock/{Code}">{Code}</a></td>
        <td><a href="/stockhistory/stock/{Code}">{Name}</a></td>
        <td><a href="/stockhistory/stock/{Code}">{Category}</a></td>
        <td><a href="/stockhistory/stock/{Code}">{Value}</a></td>
    </tr>


    {/stock_array} 

</table>