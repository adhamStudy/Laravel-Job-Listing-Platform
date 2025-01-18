<x-layout>
    <div
    class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl"
>
    <h2 class="text-4xl text-center font-bold mb-4">
       Edit Job 
    </h2>
    <form
    
        method="POST"
        action="{{route('jobs.update',$job->id)}}"
        enctype="multipart/form-data"
    >
    @csrf
    @method('PUT')
        <h2
            class="text-2xl font-bold mb-6 text-center text-gray-500"
        >
            Job Info
        </h2>

        <x-inputs.text id='title' name="title" label="job title" placeholder="Software Engineer"    :value="old('title',$job->title)" ></x-text>
        
            <x-inputs.text-area
            :value="old('description',$job->description)" 
            id="description"
            name="description"
            label="Description"
         
            placeholder="Job Description"
        >
        </x-inputs.text-area>
        
        

        <x-inputs.text :value="old('salary',$job->salary)"  id='salary' name="salary" label=" Salary" placeholder="90,000" type="number"></x-text>
           
            <x-inputs.text-area
            :value="old('requirements',$job->requirements)" 
            id="requirements"
            name="requirements"
            label="requirements"
              rows="5"
            placeholder="Put requirements of the job"
        >
        </x-inputs.text-area>

        <x-inputs.text-area
        :value="old('benefits',$job->benefits)" 
        id="benefits"
        name="benefits"
        label="Benifits"
          rows="5"
        placeholder="Here our company benefits"
    >
    </x-inputs.text-area>

       
        <x-inputs.text :value="old('tags',$job->tags)"  id='tags' name="tags" label=" Tags (comma-separated)" placeholder="development,coding,java,python" ></x-text>

            <x-inputs.select
            id="job_type"
            name="job_type"
            label="Job Type"
            :value="old('job_type',$job->job_type)"
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
:value="old('remote',$job->remote)"
:options="[
    '1' => 'Yes',
    '0' => 'No'
    
]"
/>


       
        <x-inputs.text :value="old('address',$job->address)"  id='address' name="address" label="address" placeholder="123 Main St" ></x-text>


            <x-inputs.text :value="old('city',$job->city)"  id='city' name="city" label="city" placeholder="Jeddah" ></x-text>


                <x-inputs.text :value="old('state',$job->state)"  id='state' name="state" label="State" placeholder="Jeddah" ></x-text>


                <x-inputs.text :value="old('zipcode',$job->zipcode)"  id='zipcode' name="zipcode" label="zipcode" placeholder="+00966" ></x-text>

        <h2
            class="text-2xl font-bold mb-6 text-center text-gray-500"
        >
            Company Info
        </h2>

        <x-inputs.text :value="old('company_name',$job->company_name)"  id='company_name' name="company_name" label="Company name" placeholder="Company name" ></x-text>


            <x-inputs.text-area
            :value="old('company_description',$job->company_description)" 
            id="company_description"
            name="company_description"
            label="Company Description"
              rows="5"
            placeholder="Here our company description lorem ipsum dolor sit amet consectetur adipisicing elit. "
        >
        </x-inputs.text-area>

        <x-inputs.text :value="old('company_website',$job->company_website)"  id='company_website' name="company_website" label="Company website" placeholder="Company website" type="url"></x-text>


            <x-inputs.text :value="old('contact_phone',$job->contact_phone)"  id='contact_phone' name="contact_phone" label="Contact phone" placeholder="Enter Contact phone" ></x-text>


                <x-inputs.text :value="old('contact_email',$job->contact_email)"  id='contact_email' name="contact_email" label="Contact Email" type="email" placeholder="Enter Contact Email" ></x-text>


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