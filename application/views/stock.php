
<p> {type} </p>


<div>
    <form action="/stockhistory/stock_" method="post">
        View other stocks <select name="Name">
            {stock_array}
            <option value="{Code}">{Name}</option>
            {/stock_array}
        </select>
        <input type="submit" value="Submit"/>
    </form>
</div>
<br/>
<div>
    <p>Recent Movements</p>
    <table>
        {movements_array}
        <tr>
            <td>{Datetime} </td>
            <td>{Code} </td>
            <td>{Action} </td>
            <td>{Amount} </td>
        </tr>
        {/movements_array}
    </table>
    
    <table>
        {recent_array}
        <tr>
            <td>{Trans} </td>
            <td>{Quantity} </td>
        </tr>
        {/recent_array}
    </table>

</div>
