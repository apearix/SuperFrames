<form action="{{ route('contact.send') }}" method="POST" class="contact-form">
    @csrf

    <!-- Name Field -->
    <div class="form-group mb-3">
        <label for="name" class="form-label">Name</label>
        <input 
            type="text" 
            name="name" 
            id="name" 
            class="form-control @error('name') is-invalid @enderror" 
            value="{{ old('name') }}" 
            required
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Email Field -->
    <div class="form-group mb-3">
        <label for="email" class="form-label">Email Address</label>
        <input 
            type="email" 
            name="email" 
            id="email" 
            class="form-control @error('email') is-invalid @enderror" 
            value="{{ old('email') }}" 
            required
        >
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Subject Field -->
    <div class="form-group mb-3">
        <label for="subject" class="form-label">Subject</label>
        <input 
            type="text" 
            name="subject" 
            id="subject" 
            class="form-control @error('subject') is-invalid @enderror" 
            value="{{ old('subject') }}"
        >
        @error('subject')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Message Field -->
    <div class="form-group mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea 
            name="message" 
            id="message" 
            rows="5" 
            class="form-control @error('message') is-invalid @enderror" 
            required
        >{{ old('message') }}</textarea>
        @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>