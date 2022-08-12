<form>
    <div class="form-group mb-3">
        <label for="name">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            placeholder="Enter Name" wire:model="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="partNumber">Part Number:</label>
        <input type="text" class="form-control @error('part_number') is-invalid @enderror" id="partNumber"
            placeholder="Enter Part Number" wire:model="part_number">
        @error('part_number')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="starting">Starting:</label>
        <input type="number" class="form-control @error('starting') is-invalid @enderror" id="starting"
            placeholder="Enter Starting" wire:model="starting">
        @error('starting')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="received">Received:</label>
        <input type="number" class="form-control @error('received') is-invalid @enderror" id="received"
            placeholder="Enter Name" wire:model="received">
        @error('received')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="shipped">Shipped:</label>
        <input type="number" class="form-control @error('shipped') is-invalid @enderror" id="shipped"
            placeholder="Enter Name" wire:model="shipped">
        @error('shipped')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="onHand">On Hand:</label>
        <input type="number" class="form-control @error('on_hand') is-invalid @enderror" id="onHand"
            placeholder="Enter Name" wire:model="on_hand">
        @error('on_hand')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group mb-3">
        <label for="minStock">Min Stock:</label>
        <input type="number" class="form-control @error('min_stock') is-invalid @enderror" id="minStock"
            placeholder="Enter Name" wire:model="min_stock">
        @error('min_stock')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="d-grid gap-2">
        <button wire:click.prevent="store()" class="btn btn-success btn-block">Save</button>
    </div>
</form>
