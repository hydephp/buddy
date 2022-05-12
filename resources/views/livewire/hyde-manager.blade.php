<section>
    @if(! Buddy::hasHydeInstance())
        <div class="container mx-auto">
            <header class="text-center mb-4">
                <h2>Hyde Manager</h2>
                <p class="lead mb-2">
                    Could not find a Hyde installation. Let's get one set up!
                </p>
                <p class="text-sm">
                    Don't have a Hyde project yet? Take a look at
                    <a href="https://hydephp.github.io/docs/master/quickstart.html">the installation docs</a>
                </p>
            </header>

            @if($formProgress >= 1)
            <form class="container col-lg-6 mt-2" wire:submit.prevent="findHydeProject">
                <div class="form-group">
                    <label for="path" class="h6">
                        Please enter the full path to your Hyde project
                        @if($formProgress > 1)
                            ✅
                        @endif
                    </label>
                    <div class="input-group ">
                        <input type="text" class="form-control form-control-lg @error('path') is-invalid @enderror" id="path" wire:model="path" placeholder="e.g. C:\Users\Hyde\Desktop\MyNewHydeProject" required>
                        <button type="submit" @class([
                            'my-0 btn',
                            'btn-primary' => $formProgress <= 1,
                            'btn-success' => $formProgress > 1,
                        ])>Find Project</button>
                    </div>
                    @error('path')
                    <div class="invalid-feedback d-block">
                        <strong>Error:</strong> {{ $message }}
                    </div>
                    @enderror
                </div>
            </form>
            @endif
        </div>
    @endif
</section>
