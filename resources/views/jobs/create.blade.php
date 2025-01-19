<x-layout>
    <div
    class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl"
>
    <h2 class="text-4xl text-center font-bold mb-4">
        Create Job Listing
    </h2>
    <form
    
        method="POST"
        action="/jobs"
        enctype="multipart/form-data"
    >
    @csrf
        <h2
            class="text-2xl font-bold mb-6 text-center text-gray-500"
        >
            Job Info
        </h2>

        <x-inputs.text id='title' name="title" label="job title" placeholder="Software Engineer" ></x-text>
        
            <x-inputs.text-area
            id="description"
            name="description"
            label="Description"
          
            placeholder="Job Description"
        >
        </x-inputs.text-area>
        
        

        <x-inputs.text id='salary' name="salary" label=" Salary" placeholder="90,000" type="number"></x-text>
           
            <x-inputs.text-area
            id="requirements"
            name="requirements"
            label="requirements"
              rows="5"
            placeholder="Put requirements of the job"
        >
        </x-inputs.text-area>

        <x-inputs.text-area
        id="benefits"
        name="benefits"
        label="Benifits"
          rows="5"
        placeholder="Here our company benefits"
    >
    </x-inputs.text-area>

       
        <x-inputs.text id='tags' name="tags" label=" Tags (comma-separated)" placeholder="development,coding,java,python" ></x-text>

{{-- 
        <div class="mb-4">
            <label class="block text-gray-700" for="job_type"
                >Job Type</label
            >
            <select
                id="job_type"
                name="job_type"
                class="w-full px-4 py-2 border rounded focus:outline-none"
            >
                <option value="Full-Time" selected>
                    Full-Time
                </option>
                <option value="Part-Time">Part-Time</option>
                <option value="Contract">Contract</option>
                <option value="Temporary">Temporary</option>
                <option value="Internship">Internship</option>
                <option value="Volunteer">Volunteer</option>
                <option value="On-Call">On-Call</option>
            </select>
        </div> --}}

        <x-inputs.select
    id="job_type"
    name="job_type"
    label="Job Type"
    value="{{ old('job_type') }}"
    :options="[
        'Full-Time' => 'Full-Time',
        'Part-Time' => 'Part-Time',
        'Contract' => 'Contract',
        'Temporary' => 'Temporary',
        'Internship' => 'Internship',
        'Volunteer' => 'Volunteer',
        'On-Call' => 'On-Call'
    ]"
/>

             

<x-inputs.select
id="remote"
name="remote"
label="Remote : "

:options="[
    '1' => 'Yes',
    '0' => 'No'
    
]"
/>


       
        <x-inputs.text id='address' name="address" label="address" placeholder="123 Main St" ></x-text>


            <x-inputs.text id='city' name="city" label="city" placeholder="Jeddah" ></x-text>


                <x-inputs.text id='state' name="state" label="State" placeholder="Jeddah" ></x-text>


                <x-inputs.text id='zipcode' name="zipcode" label="zipcode" placeholder="+00966" ></x-text>

        <h2
            class="text-2xl font-bold mb-6 text-center text-gray-500"
        >
            Company Info
        </h2>

        <x-inputs.text id='company_name' name="company_name" label="Company name" placeholder="Company name" ></x-text>


            <x-inputs.text-area
            id="company_description"
            name="company_description"
            label="Company Description"
              rows="5"
            placeholder="Here our company description lorem ipsum dolor sit amet consectetur adipisicing elit. "
        >
        </x-inputs.text-area>

        <x-inputs.text id='company_website' name="company_website" label="Company website" placeholder="Company website" type="url"></x-text>


            <x-inputs.text id='contact_phone' name="contact_phone" label="Contact phone" placeholder="Enter Contact phone" ></x-text>


                <x-inputs.text id='contact_email' name="contact_email" label="Contact Email" type="email" placeholder="Enter Contact Email" ></x-text>


       <x-inputs.file
        id="company_logo"
        name="company_logo"
        label="Company Logo"
          />
        <button
            type="submit"
            class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
        >
            Save
        </button>
    </form>
</div>
</x-layout>