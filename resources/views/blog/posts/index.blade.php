<x-app-layout>
     <table>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->created_at}}</td>
            </tr>
        @endforeach
     </table>
</x-app-layout>
