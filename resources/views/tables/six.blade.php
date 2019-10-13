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
              @if($table->class_id_table == 6)
                @if ($table->day_id == 1)
                  @if ($table->lesson_id == 1)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">1</button>
                          </form>
                      </td>
                      
                  @elseif ($table->lesson_id == 2)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">2</button>
                          </form>
                      </td>
                  
                  @elseif ($table->lesson_id == 3)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">3</button>
                          </form>
                      </td>
                  @elseif ($table->lesson_id == 4)
                      <td>
                        <p class="text-danger">{{$table->material->material_name}}</p>
                        <p>{{$table->teacher->name}}</p>
                        <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                              <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger btn-sm">4</button>
                        </form>
                      </td>
                  @elseif ($table->lesson_id == 5)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">5</button>
                          </form>
                      </td>
                  @elseif ($table->lesson_id == 6)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">6</button>
                          </form>
                      </td>
                  @endif
                @endif
               @endif
            @endforeach
        </tr>
        <tr>
          <th>الأحد</th>
            @foreach ($tables as  $table)
              @if($table->class_id_table == 6)
                @if ($table->day_id == 2)
                  @if ($table->lesson_id == 1)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">1</button>
                          </form>
                      </td>
                  @elseif ($table->lesson_id == 2)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">2</button>
                          </form>
                      </td>
                  @elseif ($table->lesson_id == 3)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">3</button>
                          </form>
                      </td>
                  @elseif ($table->lesson_id == 4)
                      <td>
                        <p class="text-danger">{{$table->material->material_name}}</p>
                        <p>{{$table->teacher->name}}</p>
                        <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                              <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-danger btn-sm">4</button>
                        </form>
                      </td>
                  @elseif ($table->lesson_id == 5)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">5</button>
                          </form>
                      </td>
                  @elseif ($table->lesson_id == 6)
                      <td>
                          <p class="text-danger">{{$table->material->material_name}}</p>
                          <p>{{$table->teacher->name}}</p>
                          <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                                <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit"  class="btn btn-danger btn-sm">6</button>
                          </form>
                      </td>
                  @endif
                @endif
               @endif
            @endforeach
        </tr>
         <tr>
          <th>الأثنين</th>
          @foreach ($tables as  $table)
          @if($table->class_id_table == 6)
            @if ($table->day_id == 3)
              @if ($table->lesson_id == 1)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">1</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 2)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">2</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 3)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">3</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 4)
                  <td>
                    <p class="text-danger">{{$table->material->material_name}}</p>
                    <p>{{$table->teacher->name}}</p>
                    <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                          <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm">4</button>
                    </form>
                  </td>
              @elseif ($table->lesson_id == 5)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">5</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 6)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">6</button>
                      </form>
                  </td>
              @endif
            @endif
            @endif
          @endforeach 
        </tr>
        <tr>
          <th>الثلاثاء</th>
          @foreach ($tables as  $table)
          @if($table->class_id_table == 6)
            @if ($table->day_id == 4)
              @if ($table->lesson_id == 1)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">1</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 2)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">2</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 3)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">3</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 4)
                  <td>
                    <p class="text-danger">{{$table->material->material_name}}</p>
                    <p>{{$table->teacher->name}}</p>
                    <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                          <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm">4</button>
                    </form>
                  </td>
              @elseif ($table->lesson_id == 5)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">5</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 6)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">6</button>
                      </form>
                  </td>
              @endif
            @endif
           @endif
        @endforeach
        </tr>
        <tr>
          <th>الأربعاء</th>
          @foreach ($tables as  $table)
          @if($table->class_id_table == 6)
            @if ($table->day_id == 5)
              @if ($table->lesson_id == 1)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">1</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 2)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">2</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 3)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">3</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 4)
                  <td>
                    <p class="text-danger">{{$table->material->material_name}}</p>
                    <p>{{$table->teacher->name}}</p>
                    <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                          <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm">4</button>
                    </form>
                  </td>
              @elseif ($table->lesson_id == 5)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">5</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 6)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">6</button>
                      </form>
                  </td>
              @endif
            @endif
           @endif
        @endforeach
        </tr>
        <tr>
          <th>الخميس</th>
          @foreach ($tables as  $table)
          @if($table->class_id_table == 6)
            @if ($table->day_id == 6)
              @if ($table->lesson_id == 1)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">1</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 2)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">2</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 3)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">3</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 4)
                  <td>
                    <p class="text-danger">{{$table->material->material_name}}</p>
                    <p>{{$table->teacher->name}}</p>
                    <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                          <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-danger btn-sm">4</button>
                    </form>
                  </td>
              @elseif ($table->lesson_id == 5)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">5</button>
                      </form>
                  </td>
              @elseif ($table->lesson_id == 6)
                  <td>
                      <p class="text-danger">{{$table->material->material_name}}</p>
                      <p>{{$table->teacher->name}}</p>
                      <form action="{{ route('tables.destroy', $table->id) }}" method="POST">
                            <span class="btn btn-secondary text-info" style="border:none">{{$table->time_from}} <br> {{$table->time_to}}</span>
                              @csrf
                              @method('DELETE')
                              <button type="submit"  class="btn btn-danger btn-sm">6</button>
                      </form>
                  </td>
              @endif
            @endif
           @endif
        @endforeach
        </tr>
    </tbody>
  </table>
