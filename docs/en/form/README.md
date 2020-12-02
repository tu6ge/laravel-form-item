# Basic usage

Starting from this section, we will introduce the basic use of form fields one by one.

## Public Attibute

All form fields have the following attibutes.

### name

any form item has `name` atribute,and it is not empty,it interacts with `form` through this value.

### id

any form item has `id` atribute，The value of the `id` attribute that is finally displayed in the `html`.
If it is not set, the component will automatically generate a prefix of `input_` random string.

### value

any form item has `value` atribute，the value can be empty.It corresponds to the default value of the form item,
this can be useful in your edit form
