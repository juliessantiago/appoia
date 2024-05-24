<div>
    <div class="container mx-auto mt-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-300">Dia da Semana</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300">Início expediente</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300">Final expediente</th>
                        <th class="py-2 px-4 border-b-2 border-gray-300"> </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expedientes as $expediente)
                        <tr>
                            <td class="text-center py-2 px-4 border-b border-gray-200">{{ $expediente->diaSemana}}</td>
                            <td class="text-center py-2 px-4 border-b border-gray-200">{{ $expediente->inicioExpediente}}</td>
                            <td class="text-center py-2 px-4 border-b border-gray-200">{{ $expediente->fimExpediente}}</td>
                            <td class="text-center py-2 px-2  border-gray-200"> <a href="#" id="excluir"><img class="" src="{{ asset('images/icons/delete.png')}}"/></a></td>
                            <td class="text-center py-2 px-2  border-gray-200"> <a href="#" id=""><img class="" src="{{ asset('images/icons/escrever.png')}}"/></a></td>
                    @endforeach
                </tbody>
            </table>
          
        </div>
    </div>
    
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const myButton = document.getElementById('excluir');
        myButton.addEventListener('click', () => {
            Swal.fire("chamou função");
        });
    });
</script>
