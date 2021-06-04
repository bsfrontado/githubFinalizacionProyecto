<table class="table table-light table-hover">

      
      <thead class="thead-dark">
      <tr>
          <th>#</th>
          <th>placas</th>
          <th>llantas</th>
          <th>puertas</th>
          <th>cogineria</th>
          <th>motor</th>
          <th>luces</th>
          <th>sonido</th>
          <th>foto</th>
          </tr>
    </thead>
    <tbody>
    @foreach($imprimir as $imprime)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$imprime->placas}}</td>
            <td>{{$imprime->llantas}}</td>
            <td>{{$imprime->puertas}}</td>
            <td>{{$imprime->cogineria}}</td>
            <td>{{$imprime->motor}}</td>
            <td>{{$imprime->luces}}</td>
            <td>{{$imprime->sonido}}</td>
             <td>
             <img src="{{asset('storage').'/'.$imprime->foto}}" alt="" width="100">
             </td>
        
     @endforeach       
    </tbody>
  <div>
 </table> 