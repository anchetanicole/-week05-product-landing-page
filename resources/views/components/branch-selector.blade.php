<div class="mt-6 min-w-0 border-t border-green-mid/60 pt-5">
    <form action="https://www.google.com/maps/search/" method="GET" target="_blank" rel="noopener noreferrer"
          class="flex min-w-0 flex-col gap-3">
        <input type="hidden" name="api" value="1">
        <label for="laguna-branch" class="flex flex-wrap items-center gap-2 text-xs font-bold text-white">
            <svg aria-hidden="true" class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/>
                <circle cx="12" cy="10" r="3"/>
            </svg>
            Find a branch <span class="font-normal text-green-light">· Laguna</span>
        </label>
        <div class="flex w-full min-w-0 flex-col gap-3">
            <select id="laguna-branch" name="query" required
                    class="block w-full min-w-0 max-w-full rounded-xl border border-green-light/40 bg-white px-3 py-3 text-xs text-green outline-none focus:border-green-light focus:ring-2 focus:ring-green-light/50">
                <option value="" selected disabled>Choose a Laguna branch</option>
                @foreach (config('branches.laguna') as $location => $branches)
                    <optgroup label="{{ $location }}">
                        @foreach ($branches as $branch)
                            <option value="Starbucks {{ $branch }}, {{ $location }}, Laguna, Philippines">{{ $branch }}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
            <button type="submit" class="w-full rounded-full border border-green-light/40 bg-green-mid/40 px-4 py-2.5 text-xs font-bold text-white transition hover:border-green-light hover:bg-green-mid focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-light">
                View map<span class="sr-only"> (opens in a new tab)</span>
            </button>
        </div>
    </form>
</div>
