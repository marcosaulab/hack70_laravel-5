<div class="card bg-dark" style="width: 18rem;">
    <img src="{{ Storage::url($editor->img) }}" class="card-img-top" alt="{{ $editor->name }}">
    <div class="card-body">
        <h5 class="card-title-comic">{!! $editor->name !!}</h5>
        <p class="card-text">Description: {!! Str::limit($editor->description, 18) !!}</p>
        <p class="card-text">Foundation: {!! Str::limit($editor->foundation_year, 18) !!}</p>
        <a href="" class="btn btn-info">Scopri di più</a>
    </div>
</div>