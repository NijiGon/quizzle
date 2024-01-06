<section id="overlay">
    <div
        id="check"
        class="d-flex flex-column justify-content-center align-items-center"
    >
        <h1 id="salah">Salah</h1>
        <h3 id="text-salah">Maaf tapi jawabanmu belum benar</h3>
        <a
            href="{{ route('answer.retry', ['id' => $id]) }}"
            id="btn-salah"
            class="btn"
            >Coba lagi!</a
        >
    </div>
</section>
