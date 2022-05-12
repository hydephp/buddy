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

            <form class="container col-lg-6" wire:submit.prevent="createHydeInstance">
                <div class="form-group">
                    <label for="path">Please enter the full path to your Hyde project</label>
                    <div class="input-group ">
                        <input type="text" class="form-control" id="path" wire:model="path" placeholder="e.g. C:\Users\Hyde\Desktop\MyNewHydeProject">
                        <button type="submit" class="btn btn-primary my-0">Find Project</button>
                    </div>
                </div>
            </form>
        </div>
    @endif
</section>
