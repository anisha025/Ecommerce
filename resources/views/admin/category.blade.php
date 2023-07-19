@extends('admin.layout.main')
@section('content')
<div class="w3-container w3-padding">
    <div class="w3-row-padding w3-margin-bottom">
        <!-- This represents each notes -->
        <!-- for each loop here -->
        <div class="w3-container" style="margin-top: 50px">
            <div class="w3-modal-content w3-animate-zoom w3-padding w3-round student-detail-table">
                <table class="w3-table-all w3-card-4 w3-hoverable">
                    <tr class="w3-black">
                        <th>Name</th>
                        <th></th>
                    </tr>

                    <!-- for each loop here -->
                    @foreach($categories as $category)
                    <tr>
                        <td>annie</td>
                        <td> <a href="/category-delete/{{$category->id}}" class="w3-button  w3-xlarge"><i class="fa-solid fa-trash" style="color: #b90707"></i></a></td>
                    </tr>
                    @endforeach
                    <!-- end of for each loop here -->
                </table>
            </div>
        </div>
    </div>

    <!-- end of for each loop here -->
    <button class="w3-button w3-xxlarge w3- w3-orange bordergit branch -M main w3-round-large w3-display-bottomright w3-margin" onclick="document.getElementById('add').style.display='block'" style="position: fixed; right: 16px; bottom: 16px">
        <i class="fa-sharp fa-solid fa-plus fa-beat-fade fa-xl" style="color: #0b120a"></i>
    </button>

    <!-- This is the modal to add new note -->
    <div id="add" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-card-4 w3-padding w3-round" style="width: 40%">
            <header class="w3-container w3-border-bottom w3-border-teal w3-center">
                <span onclick="document.getElementById('add').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h2>Add category name</h2>
            </header>
            <div class="w3-container w3-padding">
                <form action="/category-store" method="post">
                    @csrf
                    <div class="w3-container">
                        <label>Name</label>
                        <input class="w3-input" type="text" name="name" placeholder="Enter category name here..." required />
                    </div>

                    <div class="w3-container w3-center">
                        <button type="submit" class="w3-button w3-teal w3-round w3-margin-top">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection