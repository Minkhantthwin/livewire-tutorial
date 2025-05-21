<div>
    {{-- In work, do what you enjoy. --}}
    <form wire:submit action="">
        <input  wire:model='bird_count' type="number"> <br>
        <textarea wire:model='descripion' name="" id=""></textarea>
        <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
    </form>
    <table>
        <tr>
            <th>Birds</th>            
        </tr>
        <tr>
            @foreach ($entries as $bird)
            <td>{{$bird}}</td>
            @endforeach
            
        </tr>
    </table>
</div>
