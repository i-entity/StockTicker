<h1>{player}</h1>

<div>
    <form action="/playerprofile" method="post">
        Players <select name="player">
            <option value="player1">Player1</option>
            <option value="player2">Player2</option>
            <option value="player3">Player3</option>
            <option value="player4">Player4</option>
        </select>
        <input type="submit" value="Submit"/>
    </form>

</div>

<div id="activity">
Purchases:
    <ul>
        <li></li>
    </ul>
Sales:
    <ul>
        <li></li>
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