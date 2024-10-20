@extends('layouts.app')

@section('content')

    <div class="container px-6 mx-auto">
        <h2 class="my-6 text-3xl font-bold text-gray-900 ">{{ $task->name }}</h2>

        <!-- Formulier voor het aanmaken van meerdere milestones -->
        <form action="{{ route('milestones.store', $task->slug) }}" method="POST" id="milestoneForm" class="space-y-4">
            @csrf

            <div id="milestones-container" class="space-y-4">
                <!-- Begin van de eerste subtaak rij -->
                <div class="milestone-item bg-white shadow-sm rounded-lg p-4 flex items-center space-x-4 border-l-4 border-limegreen">
                    <!-- Naam veld -->
                    <div class="flex-1">
                        <input
                            type="text"
                            name="milestones[0][name]"
                            class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Subtaak naam"
                            required
                        />
                    </div>

                    <!-- Uren veld -->
                    <div class="w-24">
                        <input
                            type="number"
                            name="milestones[0][hours]"
                            class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Uren"
                            required
                        />
                    </div>

                    <!-- Deadline veld -->
                    <div class="w-40">
                        <input
                            type="date"
                            name="milestones[0][deadline]"
                            class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            required
                        />
                    </div>

                    <!-- Beschrijving veld -->
                    <div class="flex-1">
                        <input
                            type="text"
                            name="milestones[0][description]"
                            class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg  focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                            placeholder="Beschrijving (optioneel)"
                        />
                    </div>

                    <!-- Verwijder knop -->
                    <button type="button" class="remove-milestone-btn text-red-600 hover:text-red-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <!-- Einde van de eerste subtaak rij -->
            </div>

            <!-- Knop om meer subtaken toe te voegen -->
            <button type="button" id="add-milestone-btn"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300">
                Voeg nog een subtaak toe
            </button>

            <!-- Opslaan knop -->
            <button type="submit"
                    class="px-4 py-2 mt-4 text-sm font-medium text-white bg-lime-600 rounded-lg hover:bg-lime-700 focus:ring-4 focus:ring-purple-400">
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
            newMilestone.classList.add('milestone-item', 'bg-white', 'shadow-sm', 'rounded-lg', 'p-4', 'flex', 'items-center', 'space-x-4', 'border-l-4', 'border-limegreen-500', 'mb-4');

            newMilestone.innerHTML = `
        <div class="flex-1">
            <input
                type="text"
                name="milestones[` + milestoneIndex + `][name]"
                class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                placeholder="Subtaak naam"
                required
            />
        </div>
        <div class="w-24">
            <input
                type="number"
                name="milestones[` + milestoneIndex + `][hours]"
                class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                placeholder="Uren"
                required
            />
        </div>
        <div class="w-40">
            <input
                type="date"
                name="milestones[` + milestoneIndex + `][deadline]"
                class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg  focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                required
            />
        </div>
        <div class="flex-1">
            <input
                type="text"
                name="milestones[` + milestoneIndex + `][description]"
                class="w-full text-sm px-3 py-2 bg-gray-50 border border-gray-300 rounded-lg  focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                placeholder="Beschrijving (optioneel)"
            />
        </div>
        <button type="button" class="remove-milestone-btn text-red-600 hover:text-red-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    `;

            container.appendChild(newMilestone);
            milestoneIndex++;

            // Voeg een event listener toe aan de knop om de mijlpaal te verwijderen
            newMilestone.querySelector('.remove-milestone-btn').addEventListener('click', function () {
                newMilestone.remove();
            });
        });

    </script>

@endsection
