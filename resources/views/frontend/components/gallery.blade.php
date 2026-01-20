<!-- Gallery Slider Section Starts -->
<div class="gallery-slider">
    @foreach($featuredPhotos as $photo)
        <div class="slide">
            <img src="{{ asset('storage/' . $photo->image) }}" alt="gallery image">
        </div>
    @endforeach
</div>
<!-- Gallery Slider Section Ends -->