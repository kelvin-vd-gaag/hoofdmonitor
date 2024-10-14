@extends('layouts.app')

@section('content')

    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">{{ $task->name }}</h2>
        <!-- Formulier voor het aanmaken van meerdere milestones -->
        <form action="{{ route('milestones.store', $task->slug) }}" method="POST" id="milestoneForm">
            @csrf

            <div id="milestones-container">
                <!-- Begin van de eerste mijlpaal invoerveld -->
                <div class="milestone-item mb-4">
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[0][name]">
                                Subtaak naam
                            </label>
                            <input
                                type="text"
                                name="milestones[0][name]"
                                class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                                placeholder="Subtaak naam"
                                required
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[0][hours]">
                                Uren
                            </label>
                            <input
                                type="number"
                                name="milestones[0][hours]"
                                class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                                placeholder="Aantal uren"
                                required
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[0][deadline]">
                                Deadline
                            </label>
                            <input
                                type="date"
                                name="milestones[0][deadline]"
                                class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                                required
                            />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[0][description]">
                                Beschrijving
                            </label>
                            <textarea
                                name="milestones[0][description]"
                                class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                                placeholder="Beschrijf de subtaak"
                            ></textarea>
                        </div>
                    </div>
                </div>
                <!-- Einde van de eerste mijlpaal invoerveld -->
            </div>

            <!-- Knop om meer subtaken toe te voegen -->
            <button type="button" id="add-milestone-btn"
                    class="px-4 py-2 mt-4 text-sm font-medium text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                Voeg nog een subtaak toe
            </button>

            <!-- Opslaan knop -->
            <button type="submit"
                    class="px-4 py-2 mt-4 text-sm font-medium text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Opslaan
            </button>
        </form>
    </div>

    <!-- JavaScript voor dynamisch toevoegen en verwijderen van subtaken -->
    <script>
        let milestoneIndex = 1; // Start met 1 omdat het eerste item handmatig is ingevoerd
        document.getElementById('add-milestone-btn').addEventListener('click', function () {
            const container = document.getElementById('milestones-container');
            const newMilestone = document.createElement('div');
            newMilestone.classList.add('milestone-item', 'mb-4');

            newMilestone.innerHTML = `
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[\${milestoneIndex}][name]">
                            Subtaak naam
                        </label>
                        <input
                            type="text"
                            name="milestones[\${milestoneIndex}][name]"
                            class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                            placeholder="Subtaak naam"
                            required
                        />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[\${milestoneIndex}][hours]">
                            Uren
                        </label>
                        <input
                            type="number"
                            name="milestones[\${milestoneIndex}][hours]"
                            class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                            placeholder="Aantal uren"
                            required
                        />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[\${milestoneIndex}][deadline]">
                            Deadline
                        </label>
                        <input
                            type="date"
                            name="milestones[\${milestoneIndex}][deadline]"
                            class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                            required
                        />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-400" for="milestones[\${milestoneIndex}][description]">
                            Beschrijving
                        </label>
                        <textarea
                            name="milestones[\${milestoneIndex}][description]"
                            class="block w-full px-4 py-2 mt-1 text-sm bg-white border border-gray-300 rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                            placeholder="Beschrijf de subtaak"
                        ></textarea>
                    </div>
                    <div class="flex items-center">
                        <button type="button" class="remove-milestone-btn px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-lg">
                            Verwijderen
                        </button>
                    </div>
                </div>
            `;
            container.appendChild(newMilestone);
            milestoneIndex++;

            // Voeg een event listener toe aan de knop om de mijlpaal te verwijderen
            newMilestone.querySelector('.remove-milestone-btn').addEventListener('click', function () {
                newMilestone.remove();
            });
        });

        // Event listener voor de verwijderknop van de eerste mijlpaal
        document.querySelector('.remove-milestone-btn')?.addEventListener('click', function () {
            this.closest('.milestone-item').remove();
        });
    </script>

@endsection
