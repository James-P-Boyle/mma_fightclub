import{j as s,Y as m}from"./app.js";import{A as t}from"./AuthenticatedLayout.js";import i from"./DeleteUserForm.js";import o from"./UpdatePasswordForm.js";import d from"./UpdateProfileInformationForm.js";import"./ApplicationLogo.js";import"./transition.js";import"./TextInput.js";import"./InputLabel.js";import"./PrimaryButton.js";function w({auth:r,mustVerifyEmail:e,status:a}){return s.jsxs(t,{user:r.user,header:s.jsx("h2",{className:"font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight",children:"Profile"}),children:[s.jsx(m,{title:"Profile"}),s.jsx("div",{className:"py-12",children:s.jsxs("div",{className:"max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6",children:[s.jsx("div",{className:"p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg",children:s.jsx(d,{mustVerifyEmail:e,status:a,className:"max-w-xl"})}),s.jsx("div",{className:"p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg",children:s.jsx(o,{className:"max-w-xl"})}),s.jsx("div",{className:"p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg",children:s.jsx(i,{className:"max-w-xl"})})]})})]})}export{w as default};
