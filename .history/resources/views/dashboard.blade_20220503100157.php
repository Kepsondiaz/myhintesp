<x-app-layout>
<div>
    <form action="dashboard" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for=""></label>
            <select name="" id="">
                <option value=""></option>
                
            </select>
        </div>


        <input type="file" name="file">
       <button type="submit">Uploader</button>
    </form>
</div>
</x-app-layout>
