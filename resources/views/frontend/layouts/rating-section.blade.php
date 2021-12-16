<section class="rating">
    <h3>RATE <span>US</span></h3>
    <div class="rating-container">
        
        <form action="{{ route('rate.send') }}" method="post" class="star-widget" >
        @csrf
            <input type="radio" name="rate" id="rate-5" value="5" required>
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4" value="4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3" value="3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2" value="2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1" value="1">
            <label for="rate-1" class="fas fa-star"></label>
            
            <header class="text-alert"></header>
            <div class="textarea">
                <textarea name="message" cols="30" placeholder="Describe your experience.." required="required"></textarea>
            </div>

            <div class="btn">
                <button id="rating-btn" type="submit">RATE</button>
            </div>
                
        </form>

        

    </div>
</section>