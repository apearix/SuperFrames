<form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
    @csrf

    <div class="input-group mb-3">
        <input 
            type="email" 
            name="email" 
            class="form-control @error('email') is-invalid @enderror" 
            placeholder="Enter your email address" 
            value="{{ old('email') }}" 
            required
        >
        <button class="btn btn-primary" type="submit">Subscribe</button>

        @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
</form>