<h1>{player}</h1>

<div>
    <form action="/playerprofile" method="post">
        Players <select name="player">
            {player_array}
            <option value="{Player}">{Player}</option>
            {/player_array}
        </select>
        <input type="submit" value="Submit"/>
    </form>

</div>

<div id="activity">
Purchases:
    <ul>
        {player_transactions}
        <li>{Stock}: {Trans}: {Quantity}</li>
        {/player_transactions}
    </ul>
Sales:
    <ul>
        {player_sales}
        <li>{Stock}: {Trans}: {Quantity}</li>
        {/player_sales}
    </ul>
</div>

<div id="holdings">Holdings<br>
<ul>
    <li>Gold: {gold_qty}</li>
    <li>Silver: {silver_qty}</li>
    <li>Bonds: {bonds_qty}</li>
    <li>Oil: {oil_qty}</li>
    <li>Industrials: {industrials_qty}</li>
    <li>Grain: {grains_qty}</li>
</ul>
</div>

<div id="">

</div>