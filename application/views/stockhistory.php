<form role="form">
    <div class="form-group">
        <label for="sel1">Select a stock:</label>
        <select class="form-control" id="sel1">
            <option>Stock 1</option>
            <option>Stock 2</option>
            <option>Stock 3</option>
            <option>Stock 4</option>
        </select>
    </div>
</form>
<div class = "row">
    <div class="panel1 panel-primary col-md-12">
        <!-- Default panel contents -->
        <div class="panel-heading">Stock</div>
        <div class="panel-body">
            <!--table-->
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                        <th>Amount</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/stockhistory/stock/{Name}">{Code}</a></td>
                        <td>$1.00</td>
                    </tr>
                    <tr>
                        <td><a href="/stockhistory/stock/{Name}">{Code}</a></td>
                        <td>$2.00</td>
                    </tr>
                </tbody>
            </table>
            <!--end of table-->
        </div>
    </div>
</div>
