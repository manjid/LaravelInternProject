<div class="pt-1 pb-1">
    <form action="{{ route('helpdesk.store') }}" method="POST" class="w-1/3 mt-6 mb-6 ml-40 transition ease-in-out delay-75 border-0 shadow-xl hover:animate-pulse hover:-translate-y-1 hover:scale-95 card card-side card-body bg-slate-200" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <legend class="text-lg">
                Step 1: Register
                <a class="float-left text-blue-500 previous">Back</a>
            </legend>

            <!-- Form fields for Step 1 -->

            <ul class="steps">
                <li class="step @if ( $currentStep == 1) step-primary @endif">Register</li>
                <li class="step">Choose Plan</li>
                <li class="step">Purchase</li>
                <li class="step">Receive Product</li>
            </ul>

            <button type="submit" class="float-right next">Next Step</button>

        </fieldset>

        <fieldset style="display: none;">
            <legend class="text-lg">
                Step 2: Choose Plan
                <a class="float-left text-blue-500 previous">Back</a>
            </legend>

            <!-- Form fields for Step 2 -->

            <ul class="steps">
                <li class="step">Register</li>
                <li class="step step-primary @if ( $currentStep == 2) @endif">Choose Plan</li>
                <li class="step">Purchase</li>
                <li class="step">Receive Product</li>
            </ul>

            <button type="submit" class="float-right next">Next Step</button>

        </fieldset>

    </form>
</div>

<script>
    let $fieldsets = $('fieldset');
    let $steps = $('.step');

    $('fieldset').hide();

    @if ( ! isset($helpdesk) )
        $fieldsets.first().show();
    @else
        $fieldsets.eq($currentStep - 1).show();
    @endif

    $('.previous').click( function() {
        let $currentFieldset = $fieldsets.filter(':visible');

        $currentFieldset.hide();
        $currentFieldset.prev().show();

        $steps.removeClass('step-primary').first().addClass('step-primary');
    });

    $('.next').click( function() {
        let $currentFieldset = $fieldsets.filter(':visible');

        if (!validateForm($currentFieldset)) {
            return;
        }

        $currentFieldset.hide();

        if ($currentFieldset.index() === $fieldsets.length - 1) {
            // Handle form submission here
            $currentFieldset.submit();
        } else {
            $currentFieldset.next().show();

            // Update the active step
            $steps.removeClass('step-primary').eq($currentFieldset.index() + 1).addClass('step-primary');
        }
    });
</script>
