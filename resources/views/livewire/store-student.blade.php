<div>
    <form wire:submit.prevent="savedate">
        <div>
            <label >name</label>
            <input type="text" wire:model='name'>
        </div>
        <div>
            <label >email</label>
            <input type="email" wire:model='email'>
        </div>
        <div>
            <label >image</label>
            <input type="file" wire:model='image'>
        </div>
        <div>

            <input type="submit" value="save_data">
        </div>
    </form>
</div>
