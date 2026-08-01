<div class="bg-white p-6 rounded-2xl border border-[var(--color-border)] shadow-xs">
    <div class="flex items-center justify-between pb-4 mb-6 border-b border-[var(--color-border)]">
        <h3 class="font-heading text-lg font-bold text-[var(--color-primary)]">Filter Frames</h3>
        <button 
            type="button" 
            @click="selectedOccasion = 'all'; selectedPrice = 'all'; sortBy = 'default'" 
            class="text-xs text-[var(--color-secondary)] hover:underline font-medium"
        >
            Reset All
        </button>
    </div>

    <!-- Occasion Filter -->
    <div class="mb-6">
        <label class="block text-xs font-semibold uppercase tracking-wider text-[var(--color-heading)] mb-3">
            Occasion
        </label>
        <div class="space-y-2">
            <template x-for="occ in ['all', 'Anniversary', 'Birthday', 'Baby', 'Wedding', 'Pet']" :key="occ">
                <label class="flex items-center gap-2 text-sm text-[var(--color-body)] hover:text-[var(--color-primary)] cursor-pointer">
                    <input 
                        type="radio" 
                        name="occasion" 
                        :value="occ" 
                        x-model="selectedOccasion"
                        class="text-[var(--color-primary)] focus:ring-[var(--color-primary)]"
                    >
                    <span x-text="occ === 'all' ? 'All Occasions' : occ" class="capitalize"></span>
                </label>
            </template>
        </div>
    </div>

    <!-- Price Range Filter -->
    <div class="mb-6">
        <label class="block text-xs font-semibold uppercase tracking-wider text-[var(--color-heading)] mb-3">
            Price Range
        </label>
        <div class="space-y-2">
            <label class="flex items-center gap-2 text-sm text-[var(--color-body)] cursor-pointer">
                <input type="radio" name="price" value="all" x-model="selectedPrice" class="text-[var(--color-primary)]">
                <span>All Prices</span>
            </label>
            <label class="flex items-center gap-2 text-sm text-[var(--color-body)] cursor-pointer">
                <input type="radio" name="price" value="under-1000" x-model="selectedPrice" class="text-[var(--color-primary)]">
                <span>Under ₹1,000</span>
            </label>
            <label class="flex items-center gap-2 text-sm text-[var(--color-body)] cursor-pointer">
                <input type="radio" name="price" value="1000-2000" x-model="selectedPrice" class="text-[var(--color-primary)]">
                <span>₹1,000 – ₹2,000</span>
            </label>
            <label class="flex items-center gap-2 text-sm text-[var(--color-body)] cursor-pointer">
                <input type="radio" name="price" value="above-2000" x-model="selectedPrice" class="text-[var(--color-primary)]">
                <span>Above ₹2,000</span>
            </label>
        </div>
    </div>

    <!-- Sort By -->
    <div>
        <label for="sort-select" class="block text-xs font-semibold uppercase tracking-wider text-[var(--color-heading)] mb-3">
            Sort By
        </label>
        <select 
            id="sort-select"
            x-model="sortBy" 
            class="w-full px-3 py-2 rounded-lg border border-[var(--color-border)] text-sm text-[var(--color-body)] focus:ring-2 focus:ring-[var(--color-primary)]"
        >
            <option value="default">Featured / Default</option>
            <option value="price-low">Price: Low to High</option>
            <option value="price-high">Price: High to Low</option>
        </select>
    </div>
</div>