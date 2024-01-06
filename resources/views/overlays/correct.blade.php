
<section id="overlay">
    <div id="check" class="d-flex flex-column justify-content-center align-items-center ">
        <h1 id="salah" class="text-success ">Benar</h1>
        <h3 id="text-salah">Selamat!</h3>
        <a href="{{route('question.details', ['id' => $id, 'idx' => $idx + 1])}}" id="btn-salah" class="btn">Pertanyaan Selanjutnya</a>
    </div>
</section>

