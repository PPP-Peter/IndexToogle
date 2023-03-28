import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-index-toggle', IndexField)
  app.component('detail-index-toggle', DetailField)
  app.component('form-index-toggle', FormField)
})
