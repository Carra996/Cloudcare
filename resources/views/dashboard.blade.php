<html>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<style>
    table td {
        vertical-align: middle;
    }
</style>
<div class="container">
    <div class="row">
        <table id="example" class="table" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">IMAGE</th>
                    <th class="text-center">NAME</th>
                    <th class="text-center">IBU</th>
                    <th class="text-center">FIRST BREWED</th>
                    <th class="text-center">DESCRIPTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beers as $beer)
                <tr>
                    <td class="text-center">{{ $beer->id }}</td>
                    <td class="text-center"><img width="100" src="{{ $beer->image_url }}"></td>
                    <td class="text-center">{{ $beer->name }}</td>
                    <td class="text-center">{{ $beer->ibu }}</td>
                    <td class="text-center">{{ $beer->first_brewed }}</td>
                    <td class="text-center">{{ $beer->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <nav aria-label="...">
            <ul class="pagination justify-content-end pagination-lg">
                @php    $page = Request::get('page');  @endphp
                
                @if($page == 1)
                <li class="page-item disabled"><a class="page-link" href="" tabindex="-1" aria-disabled="true"><</a></li>
                @else
                <li class="page-item"><a class="page-link" href="/?page={{ Request::get('page')-1 }}" tabindex="-1" aria-disabled="true"><</a></li>
                @endif
                <li class="page-item"><a class="page-link" href="/?page={{ Request::get('page')+1 }}">></a></li>
            </ul>
        </nav>
    </div>
</div>

</html>