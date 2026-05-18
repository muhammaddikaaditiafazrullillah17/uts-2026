<div>

    <x-navbar />

    <section style="padding: 40px; max-width: 1200px; margin: auto;">

        <h1 style="font-size: 40px; margin-bottom: 10px;">
            My Projects
        </h1>

        <p style="margin-bottom: 40px; color: gray;">
            Semua project diambil dari Filament Admin Panel.
        </p>

        <div style="
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
        ">

            @foreach ($projects as $project)

                <div style="
                    border:1px solid #ddd;
                    padding:20px;
                    border-radius:15px;
                    background:white;
                    box-shadow:0 2px 10px rgba(0,0,0,0.05);
                ">

                    @if($project->image)
                        <img
                            src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->title }}"
                            style="
                                width:100%;
                                height:200px;
                                object-fit:cover;
                                border-radius:10px;
                                margin-bottom:15px;
                            "
                        >
                    @endif

                    <h2 style="
                        font-size:24px;
                        margin-bottom:10px;
                    ">
                        {{ $project->title }}
                    </h2>

                    <p style="
                        color:#555;
                        line-height:1.6;
                    ">
                        {{ $project->description }}
                    </p>

                </div>

            @endforeach

        </div>

    </section>

</div>