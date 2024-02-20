    <br><br>
    <footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <h5>
                     <b>SATYAM  REALTY  SERVICES</b>
                  </h5>
                <p><a href="/about-us" style="text-decoration: none; color:white">About Us</a></p>
                <p><a href="/contact-us" style="text-decoration: none; color:white">Contact Us</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h5>Services</h5>
                <p>ALL RESIDENTIAN PROJECTS</p>
                <p>ALL COMMERCIAL PROJECTS</p>
            </div>
            <div class="col-lg-4 mb-3">
                <h5>Social Media</h5>
                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>&nbsp;&nbsp;
                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>&nbsp;&nbsp;
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</footer>

    {{-- <script>
        //About Project
        const aboutProjectCheckbox = document.getElementById('aboutproject-checkbox');
        const aboutProjectTextarea = document.getElementById('aboutproject-textarea');

        aboutProjectCheckbox.addEventListener('change', () => {
            aboutProjectTextarea.disabled = !aboutProjectCheckbox.checked;
        });

        //About Project
        const aboutBuilderCheckbox = document.getElementById('aboutbuilder-checkbox');
        const aboutBuilderTextarea = document.getElementById('aboutbuilder-textarea');

        aboutBuilderCheckbox.addEventListener('change', () => {
            aboutBuilderTextarea.disabled = !aboutBuilderCheckbox.checked;
        });

        //Project Features
        const projectFeaturesCheckbox = document.getElementById('projectFeatures-checkbox');
        const projectFeaturesTextarea = document.getElementById('projectFeatures-textarea');

        projectFeaturesCheckbox.addEventListener('change', () => {
            projectFeaturesTextarea.disabled = !projectFeaturesCheckbox.checked;
        });

        //Site Plan
        const sitePlanCheckbox = document.getElementById('sitePlan-checkbox');
        const sitePlanTextarea = document.getElementById('sitePlan-textarea');

        sitePlanCheckbox.addEventListener('change', () => {
            sitePlanTextarea.disabled = !sitePlanCheckbox.checked;
        });

        //Location Plan
        const locationPlanCheckbox = document.getElementById('locationPlan-checkbox');
        const locationPlanTextarea = document.getElementById('locationPlan-textarea');

        locationPlanCheckbox.addEventListener('change', () => {
            locationPlanTextarea.disabled = !locationPlanCheckbox.checked;
        });

        //Floor Plan
        const floorPlanCheckbox = document.getElementById('floorPlan-checkbox');
        const floorPlanTextarea = document.getElementById('floorPlan-textarea');

        floorPlanCheckbox.addEventListener('change', () => {
            floorPlanTextarea.disabled = !floorPlanCheckbox.checked;
        });


	

    </script> --}}

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const textareas = document.querySelectorAll('.ckeditor-textarea');
        textareas.forEach(textarea => {
            ClassicEditor
            .create(textarea, {
                ckfinder: {
                    uploadUrl: '{{ route('ckeditor.upload',['_token'=> csrf_token()]) }}',
                },
            })
            .catch(error => {
                console.error(error);
            });
        });
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ url('frontend/js/script.js') }}"></script>
</body>
</html>