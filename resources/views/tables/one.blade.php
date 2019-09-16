<table class="table table-hover">
    <thead>
        <tr>
            <th>اليوم</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
        </tr>
    </thead>
    <tbody>
         
        <tr>
            <td>السبت</td>
            @foreach ($tables as  $table)
                @if ($table->day_id == 1)
                    <td>
                        <p>{{$table->lesson_id}}</p>
                        <p>{{$table->material->material_name}}</p>
                        <p>{{$table->teacher->name}}</p>
                        <span class="btn btn-secondary">{{$table->time_from}} <br> {{$table->time_to}}</span>
                    </td>
                @endif
            @endforeach
        </tr>
        <tr>
                <th>الأحد</th>
              </tr>
              <tr>
                <th>الأثنين</th>
              </tr>
              <tr>
                <th>الثلاثاء</th>
              </tr>
              <tr>
                <th>الأربعاء</th>
              </tr>
              <tr>
                <th>الخميس</th>
              </tr>
    </tbody>
  </table>
