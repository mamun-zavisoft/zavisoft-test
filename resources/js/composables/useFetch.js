import { ref } from "vue"

export function useFetch(url, options = {}) {

    const data = ref(null)
    const error = ref(null)
    const loading = ref(true)

    const fetchData = async () => {
        loading.value = true
        error.value = null

        try {
            const res = await fetch(url, options)
            if (!res.ok) throw new Error(`Error: ${res.status}`)

            const json = await res.json()
            data.value = json.data    
        } 
        catch (err) {
            error.value = err.message
        } 
        finally {
            loading.value = false
        }
    }

    fetchData()

    return { data, error, loading, refetch: fetchData }
}
