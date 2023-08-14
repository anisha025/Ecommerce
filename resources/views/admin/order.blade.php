@extends('admin.layout.main')
@section('content')


<style>
    .order-list {
        margin: 20px;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .heading-order {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .table-container {
        margin-top: 10px;
    }

    .OrderTable {
        width: 100%;
        border-collapse: collapse;
    }

    .OrderTable th {
        text-align: left;
        background-color: black;
        color: white;
        padding: 10px;
    }

    .OrderTable td {
        padding: 10px;
        border: 1px solid #ccc;
    }

    .OrderTable td img {
        width: 100px;
        height: 100px;
        margin-right: 20px;
        float: left;
    }

    .OrderTable td h4 {
        margin-top: 30px;
        font-size: 18px;
    }
</style>


<div class="w3-container" style="margin-top: 50px">
    <div class=" w3-animate-zoom w3-padding w3-round student-detail-table">
        <table class="OrderTable">
            <tr>
                <th>Order ID</th>
                <th>Items</th>
                <th>Quantity</th>
                <th>Total Price</th>

            </tr>

            <tr>
                <td style="font-weight: bold">21041074</td>
                <td>
                    <img class="view-cart-img" src="/Image/cloth.jpg" alt="" />
                    <h4>Scarf</h4>
                </td>

                <td>Rs. 1200</td>
                <td>2056-02-10</td>
            </tr>
        </table>
    </div>
</div>
@endsection