<x-app-layout>
<div>
    <form action="dashboard" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for=""></label>
            <select name="" id="">
                <option value=""></option>
                @foreach ($departements as $dpt)
                    <option value="">{{A}}</option>
                @endforeach 
            </select>
        </div>


        <input type="file" name="file">
       <button type="submit">Uploader</button>
    </form>
</div>
</x-app-layout>
